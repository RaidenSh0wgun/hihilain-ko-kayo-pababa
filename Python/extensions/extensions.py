type = input("input your file name with its extension: ")

EXTENSIONS = {
    "gif": "image/gif",
    "jpeg": "image/jpeg",
    "txt": "text/plain",
    "pdf": "application/pdf",
    "png": "image/png",
    "zip": "application/zip",
    "img": "image/img",

 }

type = type.strip()

last_dot = type.rfind('.')

if last_dot != -1:
    extensions = type[last_dot + 1:].lower()

media_type = EXTENSIONS.get(extensions, "Not an recognized as an extension")

print(f"The media type of {type} is {media_type}")
