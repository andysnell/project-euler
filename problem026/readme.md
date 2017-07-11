# Reciprocal Cycles

[Problem Source](https://projecteuler.net/problem=26)

A unit fraction contains 1 in the numerator. The decimal representation of the 
unit fractions with denominators 2 to 10 are given:

1/2	= 	0.5

1/3	= 	0.(3)

1/4	= 	0.25

1/5	= 	0.2

1/6	= 	0.1(6)

1/7	= 	0.(142857)

1/8	= 	0.125

1/9	= 	0.(1)

1/10	= 	0.1

Where 0.1(6) means 0.166666..., and has a 1-digit recurring cycle. It can be 
seen that 1/7 has a 6-digit recurring cycle.

Find the value of d < 1000 for which 1/d contains the longest recurring cycle 
in its decimal fraction part.

**Solution:** 983
 
 
### Notes:
This problem may be solved by brute force; however, it is much more efficient to
apply number theory to reduce the problem from string manipulation and 
comparison to simple calculations.  Basically, we know that the numbers we need
to check are coprime to 10 and that we can solve the discrete logarithm to find
the longest recurring cycle

Helpful resource: http://eli.thegreenplace.net/2009/02/25/project-euler-problem-26/
