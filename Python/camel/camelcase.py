name = input("Enter text: ")
snake = ""
for x in name:
    if x.isupper():
        snake += "_" + x.lower()
    else:
        snake += x
        
print("output: ", snake)
        
        