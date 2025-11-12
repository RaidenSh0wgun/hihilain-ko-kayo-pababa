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

# Multi dimensional array/ List
item_list = [
    {"id": 1, "name": "Sprite Mismo", "price": 25.0, "quantity": 25},
    {"id": 2, "name": "Coke", "price": 28.0, "quantity": 9},
]


def manage_inventory():
    print(
        """
    ==================================================
    Welcome to My Inventory Management System!
    1. List items
    2. Add item
    3. Update item
    4. Delete item
    5. List low stocks
    6. Exit
        """
    )

    action = int(input("Enter 1-6 to perform desired function: "))

    match (action):
        case 1:
            list_items()
        case 2:
            add_item()
        case 3:
            update_item()
        case 4:
            delete_item()
        case 5:
            check_stocks()
        case 6:
            # Stop the loop.
            pass
        case _:
            print("Input not on option.")


def list_items():
    """
    List all the items in the item_list.
    """
    print(tabulate(item_list))


def add_item():
    """
    Add an item with the following info: id (automatically generated), name, price, and quantity.
    If an item already exists, return an error.
    """


def update_item():
    """
    Update an item by listing all the items then prompting for an item id to update.
    If the id does not exist, return an error.
    """


def delete_item():
    """
    Delete an item by listing all the items then prompting for an item id to delete.
    If the id does not exist, return an error.
    """


def check_stocks():
    """
    Displays all items which stocks are less than 10.
    """


# =========================== Bonus Function =========================== #
def buy_item():
    """
    Displays all the items and their information.
    Prompt for an item id then the quantity that they want to buy.
    If the requested quantity is greater than the available stocks, return an error.
    """


# =========================== Helper Function =========================== #
def helper():
    """
    Calls when in need of simplifying a procedure.
    """


manage_inventory()
