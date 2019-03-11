//Gontang Ragil Prakasa
//Teknik Informatika
//Universitas Ahmad Dalan

#include <iostream>
#include <string.h>
using namespace std;

main(){
	char kalimat[100],enkripsi[100], kata, pilih; 
	// kalimat[100] untuk menyimpan memori kalimat
	// kata untuk mengecek setiap perpindahan kalimat
	// pilih untuk percabangan waktu enkripsi
	// enkripsi[100] untuk menyimpan memori waktu pengembalian kalimat
	int kunci;
	// kunci untuk penmabhana kunci setiap kali waktu pengecekan dari alphabet
	cout<<"Masukkan kalimat [enkripsi/dekripsi] = ";
	cin.getline(kalimat,100);
	// cin.getline agar kalimat bisa menggunakan space
	cout<<"Masukkan kunci = ";
	cin>>kunci;
	
	for(int i=0;kalimat[i]!='\0';++i){
		kata = kalimat[i];
		if(kata>='a' && kata<='z'){
			kata = kata - kunci;
			if(kata<'a'){
				kata = kata+'z'-'a'+1;
			}
			kalimat[i] = kata;
		}
		else if (kata>='A' && kata<='Z'){
			kata = kata - kunci;
			if(kata>'a'){
				kata = kata+'Z'-'A'+1;
			}
			kalimat[i] = kata;
		}
	}
	cout<<"Dekripsi kalimat = "<<kalimat;
	cout<<endl;
	cout<<"Apakah anda ingin enkripsi kalimat (Y/N)? = ";
	cin>>pilih;

	if(pilih=='Y' || pilih=='y'){
		for(int i=0;kalimat[i]!='\0';++i){
			kata = kalimat[i];
			if(kata>='a' && kata<='z'){
				kata = kata + kunci;
				if(kata>'z'){
					kata = kata-'z'+'a'-1;
				}
				enkripsi[i] = kata;
				//kalimat[i] = dekripsi[i];
			}
			else if(kata>='A' && kata<='Z'){
				kata = kata+kunci;
				if(kata>'Z'){
					kata = kata-'Z'+'A'-1;
				}
				enkripsi[i] = kata;
				//kalimat[i] = dekripsi[i];
			}
		}
		cout<<endl;
		cout<<"Hasil Enkripsi adalah "<<enkripsi;
	}
}
