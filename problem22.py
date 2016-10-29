import string


def get_letter_values():
    values = dict()
    for index, letter in enumerate(string.ascii_uppercase):
        values[letter] = index + 1
    return values


def get_names():
    with open("files/p022_names.txt") as f:
        return [s[1:-1] for s in f.read().split(",")]


def get_name_value(name):
    global letter_values
    value = 0
    for i in name:
        value += letter_values[i]
    return value


letter_values = get_letter_values()
data = get_names()
data.sort()
total_sum = 0

for index, name in enumerate(data):
    position = index + 1
    total_sum += position * get_name_value(name)

print(total_sum)
