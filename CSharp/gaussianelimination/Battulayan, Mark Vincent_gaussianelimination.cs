using System;

namespace GaussianElimination
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("=== Gaussian Elimination Calculator ===");
            Console.WriteLine("This program solves systems of linear equations");
            Console.Write("Enter number of equations (2 or 3): ");
            string sizeInput = Console.ReadLine();
            int size = 0;
            if (sizeInput == "2")
                size = 2;
            else if (sizeInput == "3")
                size = 3;
            else
            {
                Console.WriteLine("Only 2x2 and 3x3 systems supported!");
                return;
            }
            double[,] matrix = new double[size, size + 1];
            Console.WriteLine("\nEnter the coefficients:");
            for (int i = 0; i < size; i++)
            {
                Console.WriteLine($"\nEquation {i + 1}:");
                for (int j = 0; j < size; j++)
                {
                    Console.Write($"Coefficient of x{j + 1}: ");
                    matrix[i, j] = ConvertToDouble(Console.ReadLine());
                }
                Console.Write("Constant term: ");
                matrix[i, size] = ConvertToDouble(Console.ReadLine());
            }
            Console.WriteLine("\n=== Original System ===");
            DisplaySystem(matrix, size);
            int status = GaussianEliminate(matrix, size);
            if (status == 1)
            {
                double[] solutions = BackSubstitute(matrix, size);
                Console.WriteLine("\n=== Solution ===");
                for (int i = 0; i < size; i++)
                    Console.WriteLine($"x{i + 1} = {solutions[i]:F2}");
            }
            else if (status == 0)
                Console.WriteLine("\nInfinite solutions exist!");
            else
                Console.WriteLine("\nNo solution exists!");
        }

        static double ConvertToDouble(string input)
        {
            if (double.TryParse(input, out double result))
                return result;
            return 0;
        }

        static void DisplaySystem(double[,] matrix, int size)
        {
            for (int i = 0; i < size; i++)
            {
                Console.Write("Equation " + (i + 1) + ": ");
                for (int j = 0; j < size; j++)
                {
                    if (j > 0 && matrix[i, j] >= 0)
                        Console.Write("+ ");
                    Console.Write(matrix[i, j] + "x" + (j + 1) + " ");
                }
                Console.WriteLine("= " + matrix[i, size]);
            }
        }

        static int GaussianEliminate(double[,] matrix, int size)
        {
            for (int i = 0; i < size; i++)
            {
                int maxRow = i;
                for (int k = i + 1; k < size; k++)
                    if (Math.Abs(matrix[k, i]) > Math.Abs(matrix[maxRow, i]))
                        maxRow = k;
                if (maxRow != i)
                    for (int j = 0; j <= size; j++)
                    {
                        double temp = matrix[i, j];
                        matrix[i, j] = matrix[maxRow, j];
                        matrix[maxRow, j] = temp;
                    }
                if (Math.Abs(matrix[i, i]) < 1e-10)
                {
                    bool allZero = true;
                    for (int j = i; j < size; j++)
                        if (Math.Abs(matrix[i, j]) > 1e-10) { allZero = false; break; }
                    if (allZero && Math.Abs(matrix[i, size]) < 1e-10) return 0;
                    if (allZero && Math.Abs(matrix[i, size]) > 1e-10) return -1;
                    return -1;
                }
                double pivot = matrix[i, i];
                for (int j = i; j <= size; j++)
                    matrix[i, j] /= pivot;
                for (int k = i + 1; k < size; k++)
                {
                    double factor = matrix[k, i];
                    for (int j = i; j <= size; j++)
                        matrix[k, j] -= factor * matrix[i, j];
                }
            }
            return 1;
        }

        static double[] BackSubstitute(double[,] matrix, int size)
        {
            double[] solutions = new double[size];
            for (int i = size - 1; i >= 0; i--)
            {
                double sum = 0;
                for (int j = i + 1; j < size; j++)
                    sum += matrix[i, j] * solutions[j];
                solutions[i] = (matrix[i, size] - sum) / matrix[i, i];
            }
            return solutions;
        }
    }
}
