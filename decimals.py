number = int(input("Masukkan bilangan: "))
number_string = str(number)

length = len(number_string)

for position in range(0, length):
	digit = number_string[position]
	if int(digit) != 0:
		zeros = length - int(position) - 1
	
		zero_concat = ""
		for zero in range(0,zeros):
			zero_concat = zero_concat + "0"
		print(str(digit) + zero_concat)
