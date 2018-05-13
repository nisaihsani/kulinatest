primenum = int(input("Masukkan bilangan bulat positif: "))
print("Daftar bilangan prima : ")


if primenum < 2:
	print("Tidak ada bilangan prima di bawah " + str(primenum))
else:
	for number in range(2,primenum+1):
		for x in range(2,number):
			if(number % x) == 0:
				break #bukanprima
		else:
			print(number)

