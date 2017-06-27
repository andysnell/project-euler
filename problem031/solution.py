ways = 2

penny = 1
tuppence = 2
nickel = 5
dime = 10
fifth = 20
half = 50
pound = 100

for pound_count in range(0, 2):
    for half_count in range(0, 5):
        for fifth_count in range(0, 11):
            for dime_count in range(0, 21):
                for nickel_count in range(0, 41):
                    for tuppence_count in range(0, 101):
                        for penny_count in range(0, 201):
                            value = penny * penny_count \
                                    + tuppence * tuppence_count \
                                    + nickel * nickel_count \
                                    + dime * dime_count \
                                    + fifth * fifth_count \
                                    + half * half_count \
                                    + pound * pound_count
                            if value == 200:
                                ways += 1
                            if value > 200:
                                break
print(ways)
