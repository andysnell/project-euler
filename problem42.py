import string
import math


def get_letter_values():
    values = dict()
    for index, letter in enumerate(string.ascii_uppercase):
        values[letter] = index + 1
    return values


def get_names():
    with open("files/p042_words.txt") as f:
        return [s[1:-1] for s in f.read().split(",")]


def get_name_value(name):
    global letter_values
    value = 0
    for i in name:
        value += letter_values[i]
    return value


letter_values = get_letter_values()
counter = 0

for x in get_names():
    total = math.sqrt(8 * get_name_value(x) + 1)
    if total.is_integer():
        counter += 1

print(counter)
