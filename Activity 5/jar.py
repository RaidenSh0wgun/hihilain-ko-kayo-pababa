class Jar:
    def __init__ (self, capacity=12):
        self._capacity = capacity
        self._size = 0
        
        if not isinstance(capacity, int) or capacity < 0:
            raise ValueError("Capacity must be a not-negative integer")
    
    def __str__ (self):
        return "🍪" * self._size
    
    def deposit(self, n):
        if not isinstance(n, int) or n < 0:
            raise ValueError("Deposit amount must be a non-negative integer")
        
        if self._size + n > self._capacity:
            raise ValueError("The jar is full")
        self._size += n

    def withdraw(self, n):
        if not isinstance(n, int) or n < 0:
            raise ValueError("Withdrawal amount must be a non-negative integer")
        
        if n > self._size:
            raise ValueError("Not enough cookies in the jar to withdraw")
        self._size -= n
        return n
    
    @property
    def capacity(self):
        return self._capacity
    
    @property
    def size(self):
        return self._size