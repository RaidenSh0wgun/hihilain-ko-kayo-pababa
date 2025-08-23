def main():
    if is_valid(plate):
        print("valid")
    else:
        print("invalid")
plate = input("input: ") 
def is_valid(s):
    if not (2 <= len(s) <= 6) or not s[:2].isalpha() or not s.isalnum() or not s[:2].isupper() or plate[2] == "0":
        return False
    
    for i, c in enumerate(s):
        if c.isdigit():
            if c != '0' and s[i:].isdigit():
                return True
main()