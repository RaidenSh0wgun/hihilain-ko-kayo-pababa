coke = 50
coins = [5, 10, 25]

while coke > 0:
    print(f"Amount due: {coke}")
    coin = int(input("Insert coin: "))

    if coin in coins:
        coke -= coin
    else:
        print("Your coin is rejected.")
        
if coke < 0:
    print(f"Change owed: {-coke}")
else:
    print("Change owed: 0")