import inflect

p = inflect.engine()
letter_count = 0

for x in range(1, 1001):
    s = p.number_to_words(x)
    s = s.replace(' ', '')
    s = s.replace('-', '')
    letter_count += len(s)

print(letter_count)
