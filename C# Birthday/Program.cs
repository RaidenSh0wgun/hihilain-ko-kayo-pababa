using System;

class Program
{
    static void Main()
    {
        Console.Write("Enter your birthday date (mm-dd): ");
        string input = Console.ReadLine();

        DateTime BirthdayDate = DateTime.Parse(input);

        DateTime today = DateTime.Today;

        TimeSpan difference = BirthdayDate - today;

        if (difference.Days > 0)
        {
            Console.WriteLine($"Your Birthday is in {difference.Days} days.");
        }
        else if (difference.Days < 0)
        {
            Console.WriteLine($"Your birthday has already passed. It has been {Math.Abs(difference.Days)} days since your birthday.");
        }
        else
        {
            Console.WriteLine("Your Birthday is today!");
        }
    }
}