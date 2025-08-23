expression = input("Calc> ")  
parts = expression.split()

x = int(parts[0])      
y = parts[1]           
z = int(parts[2])

if y == "+":
    print(float(x + z))
elif y == "-":
    print(float(x - z))
elif y == "*":
    print(float(x * z))
elif y == "/":
    print(x / z)
else:
    print("Unknown operator")