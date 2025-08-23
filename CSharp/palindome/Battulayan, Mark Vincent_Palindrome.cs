using System;

namespace Mark_C_Palindrome
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Enter a word: ");
            string? input = Console.ReadLine();

            if (input == null)
            {
                Console.WriteLine("No input provided.");
                return;
            }

            input = input.ToLower();
            int left = 0;
            int right = input.Length - 1;
            bool isPalindrome = true;

            while (left < right)
            {
                if (input[left] != input[right])
                {
                    isPalindrome = false;
                    break;
                }
                left++;
                right--;
            }

            if (isPalindrome)
            {
                Console.WriteLine("It is a Palindrome.");
            }
            else
            {
                Console.WriteLine("NOT a Palindrome.");
            }
        }
    }
}