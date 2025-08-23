namespace mark_C_
{
    internal class Program
    {
        static void Main()
        {
            Console.Write("Enter year here: ");
            string? inputline = Console.ReadLine();
            if (int.TryParse(inputline, out int myVar))
            {
                Console.WriteLine("User has entered year " + myVar);

                if (myVar % 4 == 0 && (myVar % 100 != 0 || myVar % 400 == 0))
                {
                    Console.WriteLine("The year you entered IS A LEAP YEAR");
                }
                else
                {
                    Console.WriteLine("NOT A LEAP YEAR");
                }
            }
            else
            {
                Console.WriteLine("Invalid input. Please enter a valid year.");
            }
        }
    }
}