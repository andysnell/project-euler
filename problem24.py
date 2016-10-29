from itertools import permutations

l = [''.join(map(str, i)) for i in list(permutations(range(0, 10)))]
l.sort()
print(l[999999])
