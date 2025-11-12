def add(a, b):
    return a + b

def subtract(a, b):
    return a - b

def multiply(a, b):
    return a * b

def divide(a, b):
    if b == 0:
        return "Error: Cannot divide by zero"
    return a / b

a = float(input("Enter first number: "))
b = float(input("Enter second number: "))
op = input("Enter operation (+, -, *, /): ")

result = None

if op == "+":
    result = add(a, b)

if op == "-":
    result = subtract(a, b)

if op == "*":
    result = multiply(a, b)

if op == "/":
    result = divide(a, b)

if result is not None:
    print("Result:", result)

if result is None:
    print("Invalid operation")
