class Jar:
    def __init__(self, capacity=12):
        if not isinstance(capacity, int) or capacity < 0:
            print("Capacity must be a non-negative integer")
            self._capacity = 0
        else:
            self._capacity = capacity
        self._size = 0
    
    def __str__(self):
        return "🍪" * self._size
    
    def deposit(self, n):
        if not isinstance(n, int) or n < 0:
            print("Deposit amount must be a non-negative integer")
        elif self._size + n > self._capacity:
            print("The jar is full, cannot deposit", n)
        else:
            self._size += n
            print(f"Deposited {n}, new size = {self._size}")
    
    def withdraw(self, n):
        if not isinstance(n, int) or n < 0:
            print("Withdrawal amount must be a non-negative integer")
        elif n > self._size:
            print("Not enough cookies in the jar to withdraw", n)
        else:
            self._size -= n
            print(f"Withdrew {n}, new size = {self._size}")
    
    @property
    def capacity(self):
        return self._capacity
    
    @property
    def size(self):
        return self._size
    
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
