from jar import Jar

def main():
    cap = 12
    jar = Jar(cap)

    while True:
        print("\nJar contains:", str(jar) if jar.size > 0 else "empty")
        print(f"Size: {jar.size}/{jar.capacity}")
        print("1. Deposit cookies")
        print("2. Withdraw cookies")
        print("3. Exit")
        choice = input("Choose an option: ")

        if choice == "1":
            n = int(input("How many cookies to deposit?: "))
            jar.deposit(n)

        elif choice == "2":
            n = int(input("How many cookies to withdraw?: "))
            jar.withdraw(n)

        elif choice == "3":
            print("Exiting")
            break

        else:
            print("Invalid option")

if __name__ == "__main__":
    main()