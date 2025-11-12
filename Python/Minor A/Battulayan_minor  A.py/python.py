from tabulate import tabulate


"""
    - *Display inventory*
    - *Add item*
    - *Remove item*
    - *Update item*
    - *Check low stock*
    - *Exit*

    # Bonus
    - *Buy*
    - *Add sock*
"""

item_list = [
    {'id': 1, 'name': 'Ellen Joe Figurine', 'price': 70000, 'quantity': 8},
    {'id': 2, 'name': 'Raiden Shogun Mousepad', 'price': 3000, 'quantity': 22},
    {'id': 3, 'name': 'Amd Radeon rx550', 'price': 80000, 'quantity': 40},
    {'id': 4, 'name': 'Lenovo thinkpad A285', 'price': 12000, 'quantity': 48},
    {'id': 5, 'name': 'Acer Aspire 3', 'price': 20000, 'quantity': 82},
    {'id': 6, 'name': 'Monitor 144hz 1080p', 'price': 5000, 'quantity': 81},
    {'id': 7, 'name': 'Nvidia RTX3050 ti', 'price': 25000, 'quantity': 21},
    {'id': 8, 'name': 'Nvidia Gt750 ti', 'price': 5000, 'quantity': 29},
    {'id': 9, 'name': 'Nvidia RTX4090', 'price': 55000, 'quantity': 5},
    {'id': 10, 'name': 'Nvidia RTX5060', 'price': 50000, 'quantity': 100},
]

next_id = 11


def manage_inventory():
    """Main function to manage the inventory system"""
    while True:
        print(
            """
    ==================================================
    Welcome to My Inventory Management System!
    1. List items
    2. Add item
    3. Update item
    4. Delete item
    5. List low stocks
    6. Buy item (Bonus)
    7. Add stock (Bonus)
    8. Randomize Inventory (Bonus)
    9. Exit
        """
        )

        try:
            action = int(input("Enter 1-9 to perform desired function: "))
            
            if action == 1:
                list_items()
            elif action == 2:
                add_item()
            elif action == 3:
                update_item()
            elif action == 4:
                delete_item()
            elif action == 5:
                check_stocks()
            elif action == 6:
                buy_item()
            elif action == 7:
                add_stock()
            elif action == 8:
                randomize_inventory()
            elif action == 9:
                print("Thank you for using the Inventory Management System!")
                break
            else:
                print("Invalid option. Please enter a number between 1-9.")
                
        except ValueError:
            print("Invalid input. Please enter a valid number.")
        except KeyboardInterrupt:
            print("\nProgram terminated by user.")
            break


def list_items():
    """
    List all the items in the item_list.
    """
    if not item_list:
        print("Inventory is empty.")
        return
    
    table_data = []
    for item in item_list:
        quantity_display = f"{item['quantity']} (Low Stock)" if item['quantity'] < 10 else str(item['quantity'])
        table_data.append([
            item['id'],
            item['name'],
            f"${item['price']:.2f}",
            quantity_display
        ])
    
    headers = ["ID", "Name", "Price", "Quantity"]
    print("\n" + "="*10)
    print("INVENTORY LIST")
    print("="*10)
    print(tabulate(table_data, headers=headers, tablefmt="grid"))
    print("="*10)


def add_item():
    """
    Add an item with the following info: id (automatically generated), name, price, and quantity.
    If an item already exists, return an error.
    """
    print("\n" + "="*10)
    print("ADD NEW ITEM")
    print("="*10)
    
    name = input("Enter item name: ").strip()
    if not name:
        print("Error: Item name cannot be empty.")
        return
    
  
    for item in item_list:
        if item['name'].lower() == name.lower():
            print("Error: Item already exists in inventory.")
            return
    
    try:
        price = float(input("Enter item price: $"))
        if price < 0:
            print("Error: Price cannot be negative.")
            return
    except ValueError:
        print("Error: Invalid price format.")
        return
    
    try:
        quantity = int(input("Enter item quantity: "))
        if quantity < 0:
            print("Error: Quantity cannot be negative.")
            return
    except ValueError:
        print("Error: Invalid quantity format.")
        return
    
    global next_id
    new_item = {
        "id": next_id,
        "name": name,
        "price": price,
        "quantity": quantity
    }
    item_list.append(new_item)
    
    print(f"Item '{name}' added successfully with ID: {next_id}")
    next_id += 1


def update_item():
    """
    Update an item by listing all the items then prompting for an item id to update.
    If the id does not exist, return an error.
    """
    print("\n" + "="*10)
    print("UPDATE ITEM")
    print("="*10)
    
    list_items()
    
    try:
        item_id = int(input("Enter item ID to update: "))
    except ValueError:
        print("Error: Invalid ID format.")
        return
    
    item = None
    for i in item_list:
        if i['id'] == item_id:
            item = i
            break
    
    if item is None:
        print("Error: ID not found.")
        return
    
    print(f"\nUpdating item: {item['name']}")
    print("(Press Enter to keep current value)")
    
    new_name = input(f"Current name: {item['name']}\nNew name: ").strip()
    if new_name:

        for other_item in item_list:
            if other_item['id'] != item_id and other_item['name'].lower() == new_name.lower():
                print("Error: Item name already exists.")
                return
        item['name'] = new_name
    
    new_price = input(f"Current price: ${item['price']:.2f}\nNew price: $").strip()
    if new_price:
        try:
            price = float(new_price)
            if price < 0:
                print("Error: Price cannot be negative.")
                return
            item['price'] = price
        except ValueError:
            print("Error: Invalid price format.")
            return
    
    new_quantity = input(f"Current quantity: {item['quantity']}\nNew quantity: ").strip()
    if new_quantity:
        try:
            quantity = int(new_quantity)
            if quantity < 0:
                print("Error: Quantity cannot be negative.")
                return
            item['quantity'] = quantity
        except ValueError:
            print("Error: Invalid quantity format.")
            return
    
    print(f"Item updated successfully!")


def delete_item():
    """
    Delete an item by listing all the items then prompting for an item id to delete.
    If the id does not exist, return an error.
    """
    print("\n" + "="*10)
    print("DELETE ITEM")
    print("="*10)
    
    list_items()
    
    try:
        item_id = int(input("Enter item ID to delete: "))
    except ValueError:
        print("Error: Invalid ID format.")
        return
    
    for i, item in enumerate(item_list):
        if item['id'] == item_id:
            item_name = item['name']
            del item_list[i]
            print(f"Item '{item_name}' deleted successfully!")
            return
    
    print("Error: ID not found.")


def check_stocks():
    """
    Displays all items which stocks are less than 10.
    
    """
    print("\n" + "="*10)
    print("LOW STOCK ITEMS")
    print("="*10)
    
    low_stock_items = [item for item in item_list if item['quantity'] < 10]
    
    if not low_stock_items:
        print("No low-stock items found.")
        return
    
    table_data = []
    for item in low_stock_items:
        table_data.append([
            item['id'],
            item['name'],
            f"${item['price']:.2f}",
            item['quantity']
        ])
    
    headers = ["ID", "Name", "Price", "Quantity"]
    print(tabulate(table_data, headers=headers, tablefmt="grid"))


# =========================== Bonus Function =========================== #
def buy_item():
    """
    Displays all the items and their information.

    """
    print("\n" + "="*10)
    print("BUY ITEM")
    print("="*10)
    
    list_items()
    
    try:
        item_id = int(input("Enter item ID to buy: "))
    except ValueError:
        print("Error: Invalid ID format.")
        return
    
    # Find item by ID
    item = None
    for i in item_list:
        if i['id'] == item_id:
            item = i
            break
    
    if item is None:
        print("Error: ID not found.")
        return
    
    try:
        buy_quantity = int(input(f"How many '{item['name']}' do you want to buy? "))
        if buy_quantity <= 0:
            print("Error: Quantity must be positive.")
            return
    except ValueError:
        print("Error: Invalid quantity format.")
        return
    
    if buy_quantity > item['quantity']:
        print(f"Error: Not enough stock. Available: {item['quantity']}")
        return
    
    # Update quantity
    item['quantity'] -= buy_quantity
    total_cost = buy_quantity * item['price']
    
    print(f"Purchase successful!")
    print(f"Bought {buy_quantity} x {item['name']}")
    print(f"Total cost: ${total_cost:.2f}")
    print(f"Remaining stock: {item['quantity']}")


def add_stock():
    """
    Add stock to existing items
    """
    print("\n" + "="*10)
    print("ADD STOCK")
    print("="*10)
    
    list_items()
    
    try:
        item_id = int(input("Enter item ID to add stock: "))
    except ValueError:
        print("Error: Invalid ID format.")
        return
    
    item = None
    for i in item_list:
        if i['id'] == item_id:
            item = i
            break
    
    if item is None:
        print("Error: ID not found.")
        return
    
    try:
        add_quantity = int(input(f"How many '{item['name']}' to add? "))
        if add_quantity <= 0:
            print("Error: Quantity must be positive.")
            return
    except ValueError:
        print("Error: Invalid quantity format.")
        return
    

    item['quantity'] += add_quantity
    
    print(f"Stock added successfully!")
    print(f"Added {add_quantity} to {item['name']}")
    print(f"New total stock: {item['quantity']}")



def helper():
    """
    simplify a procedure.
    """
    pass

def randomize_inventory():
    """
    Randomize prices and quantities for all items in the inventory.

    """
    import random
    
    print("\n" + "="*50)
    print("RANDOMIZE INVENTORY")
    print("="*50)
    
    price_choices = [15, 18, 25, 30]
    
    for item in item_list:
        item["price"] = random.choice(price_choices)
        item["quantity"] = random.randint(10, 100)
    
    print("Inventory has been randomized!")
    print("All items now have random prices ($15, $18, $25, or $30) and quantities (10-100).")
    print("Use 'List items' to see the updated inventory.")


manage_inventory()