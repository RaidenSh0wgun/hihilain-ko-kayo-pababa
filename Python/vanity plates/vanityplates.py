def is_valid(s):
    if not (2 <= len(s) <= 6) or not s[:2].isalpha() or not s.isalnum() or not s[:2].isupper():
        return False
    for i, c in enumerate(s):
        if c.isdigit():
            return c != '0' and s[i:].isdigit()
    return True

print("Valid" if is_valid(input("Plate: ")) 
      else "Invalid"
    )
def main():
    plate = input("Plate: ")
    if is_valid(plate):
        print("Valid")
    else:
        print("Invalid")