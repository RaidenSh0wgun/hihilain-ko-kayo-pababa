def add (a, b):
        addition= a + b
        return addition

def subtract(a, b):
        subtract = a - b
        return subtract

def multiply(a, b):
        multiply = a * b
        return multiply

def divide(a, b):
        divide = a / b
        return "Error: Cannot divide by zero" if b == 0 else a / b

operations = {
    "+": add,
    "-": subtract,
    "*": multiply,
    "/": divide
}

a = float(input("Enter first number: "))
op = input("Enter operation (+, -, *, /): ")     
b = float(input("Enter second number: "))

result = operations.get(op, lambda x, y: "Invalid operation")(a, b)

print("Result:", result)
