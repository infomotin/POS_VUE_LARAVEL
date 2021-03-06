<?php 



<script>
    
var subjectObject = {

"DhakaDivision": {
"DHAKA": ["Savar", "Dhamrai", "Keraniganj", "Nawabganj", "Dohar","Demra"],
"NARAYANGANJ": ["Araihazar","Bandar", "Narayanganj sadar", "Rupganj", "Sonargaon"],
"GAZIPUR": ["Kaliganj", "Kaliakair", "Kapasia", "Gazipur Sadar", "Sreepur"],
"MUNSHIGANJ": ["Munshiganj Sadar", "Sreenagar", "Sirajdikhan", "Lohajang", "Gazaria", "Tongibari"],
"MANIKGANJ": ["Harirampur", "Saturia", "Manikganj Sadar", "Ghior", "Shivalaya", "Daulatpur", "Singair"],
"NARSINGDI": ["Belabo", "Monohardi", "Narsingdi sadar", "Palash", "Raipura", "Shibpur"],
"FARIDPUR": ["Faridpur Sadar", "Alfadanga", "Boalmari", "Sadarpur", "Nagarkanda", "Bhanga",
"Charbhadrasan","Madhukhali", "Saltha"],
"MADARIPUR": ["Madaripur Sadar", "Shibchar","dasar", "Kalkini", "Rajoir"],
"GOPALGANJ": ["Gopalganj Sadar", "Kashiani", "Tungipara", "Kotalipara", "Muksudpur"],
"RAJBARI": ["Rajbari Sadar","Goalanda", "Pangsha", "Baliakandi", "Kalukhali"],
"SHARIATPUR": ["Shariatpur Sadar", "Naria", "Zanjira","Gosairhat", "Bhedarganj", "Damudya","shakhipur"],
"TANGAIL": ["Basail", "Bhuapur","Delduar", "Ghatail", "Gopalpur", "Madhupur", "Mirzapur", "Nagarpur", "Sakhipur",
"Tangail sadar", "Kalihati","Dhanbari"],
"KISHOREGANJ": ["Itna", "Katiadi", "Bhairab", "Tarail", "Hossainpur", "Pakundia", "Kuliarchar", "Kishoreganj sadar",
"Karimganj", "Bajitpur", "Austagram","Mithamain","Nikli"]
},
"MymensinghDivision": {
"Sherpur": ["Sherpur sadar", "Nalitabari", "Sreebardi", "Nakla", "Jhenaigati"],
"Mymensingh": ["Fulbaria", "Trishal", "Bhaluka", "Muktagacha", "Mymensingh sadar", "Dhobaura", "Phulpur", "Haluaghat",
"Gauripur", "Gaffargaon", "Ishwarganj", "Nandail", "Tara kanda"],
"Jamalpur": ["Jamalpur sadar", "Dewanganj ", "Baksiganj", "Islampur", "Jamalpur Sadar ", "Melandaha", "Sarishabari"],
"Netrokona": ["Atpara", "Barhatta", "Durgapur", "Khaliajuri ", "Kalmakanda", "Kendua", "Madan", "Mohanganj", "Netrokona
Sadar", "Purbadhala"]
},
"SylhetDivision": {
"Sylhet": ["Balaganj", "Beanibazar", "Bishwanath", "Companiganj", "Dakshin Surma","Fenchuganj", "Golapganj",
"Gowainghat", "Jaintiapur", "Kanaighat", "Osmani Nagar", "Sylhet Sadar", "Zakiganj"],
"Moulvibazar": ["Moulvibazar Sadar", "Kamalganj", "Kulaura", "Rajnagar", "Sreemangal", "Barlekha ", "Juri"],
"Habiganj": ["Ajmiriganj", "Baniachang", "Bahubal", "Chunarughat", "Habiganj Sadar", "Lakhai", "Madhabpur", "Nabiganj",
"Shaistaganj"],
"Sunamganj": ["Bishwamvarpur", "Chhatak", "Dakshin Sunamganj", "Derai", "Dharamapasha", "Dowarabazar", "Jagannathpur",
"Jamalganj", "Sullah", "Sunamganj Sadar","Tahirpur"]
},
"RangpurDivision": {
"Panchagarh": ["Panchagarh Sadar", "Debiganj", "Boda", "Atwari", "Tetulia"],
"Dinajpur": ["Biral ", "Birampur", "Birganj ", "Bochaganj", "Chirirbandar ", "Dinajpur Sadar", "Ghoraghat", "Hakimpur ",
"Kaharole", "Khansama ", "Nawabganj ", "Parbatipur ", "Fulbari "],
"Lalmonirhat": ["Aditmari", "Kaliganj", "Patgram", "Lalmonirhat Sadar", "Hatibandha"],
"Nilphamari": ["Nilphamari Sadar ", "Saidpur", "Jaldhaka", "Kishoreganj ", "Domar", "Dimla"],
"Gaibandha": ["Fulchhari", "Gaibandha Sadar", "Gobindaganj ", "Palashbari ", "Sadullapur", "Sundarganj ", "Saghata"],
"Thakurgaon": ["Thakurgaon Sadar", "Baliadangi", "Haripur", "Ranisankail", "Pirganj", "Dhobaura", "Phulpur"],
"Rangpur": ["Badarganj", "Mithapukur", "Gangachara", "Kaunia", "Rangpur Sadar", "Pirgacha", "Pirganj","Taraganj"],
"Kurigram": ["Bhurungamari", "Char Rajibpur", "Chilmari", "Kurigram Sadar", "Nageshwari", "Phulbari", "Rajarhat ",
"Raomari", "Ulipur"]
},
"BarishalDivision": {
"Jhalakathi": ["Jhalokati Sadar ", "Kathalia", "Nalchity", "Rajapur "],
"Patuakhali": ["Dumki ", "Patuakhali Sadar ", "Mirzaganj ", "Bauphal ", "Galachipa", "Dashmina", "Rangabali ", "Kalapara
"],
"Pirojpur": ["Bhandaria", "Kawkhali", "Mathbaria", "Nazirpur", "Nesarabad", "Pirojpur Sadar", "Indurkani"],
"Barishal": ["Agailjhara", "Babuganj", "Bakerganj", "Banaripara", "Barisal Sadar ", "Gournadi", "Hizla ", "Mehendiganj
", "Muladi ", "Wazirpur"],
"Bhola": ["Bhola Sadar", "Daulatkhan", "Burhanuddin", "Tazumuddin ", "Lalmohan", "Char Fasson", "Manpura"],
"Barguna": ["Amtali", "Bamna", "Barguna Sadar", "Betagi", "Patharghata", "Taltali"]
},
"KhulnaDivision": {
"Jashore": ["Abhaynagar", "Bagherpara", "Chaugachha", "Jhikargachha", "Keshabpur", "Jessore Sadar", "Manirampur",
"Sharsha"],
"Satkhira": ["Satkhira Sadar", "Assasuni", "Debhata", "Tala", "Kalaroa", "Kaliganj", "Shyamnagar"],
"Meherpur": ["Gangni", " Meherpur Sadar", " Mujibnagar"],
"Narail": [" Narail Sadar", " Kalia", "Lohagara"],
"Chuadanga": ["Alamdanga","Chuadanga Sadar", "Jibannagar", "Damurhuda", "Darsana"],
"Kushtia": ["Bheramara", "Daulatpur", "Khoksa", "Kumarkhali", "Kushtia Sadar", "Mirpur"],
"Magura": ["Magura Sadar ", "Mohammadpur ", "Shalikha ", "Sreepur"],
"Khulna": ["Koyra", "Dumuria", "Terokhada", "Dacope", "Dighalia", "Paikgachha", "Phultala","Batiaghata", "Rupsa"],
"Bagerhat" : ["Bagerhat Sadar","Chitalmari", "Fakirhat", "Kachua", "Mollahat", "Mongla","Morrelganj", "Rampal",
"Sarankhola"],
"Jhenaidah": ["Jhenaidah Sadar", "Shailkupa", "Harinakundu", "Kaliganj", "Kotchandpur", "Moheshpur"]
},
"RajshahiDivision": {
"Sirajganj": ["Sirajganj Sadar ", "Kazipur", "Ullahpara", "Shahjadpur", "Raiganj ", "Kamarkhanda", "Tarash", "Belkuchi
", "Chauhali"],
"Pabna": ["Atgharia ", "Bera", "Bhangura", "Chatmohar", "Faridpur Upazila", "Ishwardi ", "Pabna Sadar", "Shathia",
"Sujanagar"],
"Bogura": ["Adamdighi", "Bogra Sadar", "Sherpur upazila", "Dhunat", "Dhupchanchia", "Gabtali", "Kahaloo", "Nandigram",
"Shajahanpur", "Sariakandi", "Shibganj", "Sonatala"],
"Rajshahi": ["Bagha", "Bagmara", "Chargha???", "Durgapur", "Godaga??i", "Mohanpur", "Paba", "Puthia", "Tanore"],
"Natore": ["Gurudaspur", "Natore Sadar", "Baraigram ", "Bagatipara", "Lalpur ","Singra", "Naldanga"],
"Joypurhat": ["Joypurhat Sadar", "Akkelpur", "Kalai", "Khetlal", "Panchbibi"],
"Chapainawabganj": ["Bholahat", "Gomastapur", "Nachole", "Chapainawabganj Sadar", "Shibganj "],
"Naogaon": ["Atrai", "Badalgachhi", "Dhamoirhat", "Manda ", "Mohadevpur", "Naogaon Sadar", "Niamatpur", "Patnitala ",
"Porsha ", "Raninagar","Sapahar"]
},
"ChattogramDivision": {
"Cumilla": ["Barura", "Brahmanpara", "Burichong", "Comilla Sadar ", "Comilla Sadar Dakshin", "Chandina Upazila ",
"Chauddagram ", "Daudkandi ", "Debidwar ", "Homna ", "Laksam ", "Lalmai ","Monohorgonj","Meghna", "Muradnagar",
"Nangalkot", "Titas"],
"Feni": ["Feni Sadar", "Daganbhuiyan ", "Chhagalnaiya", "Sonagazi ", "Parshuram ", "Fulgazi "],
"Brahmanbaria": ["Brahmanbaria Sadar", "Kasba", "Akhaura", "Ashuganj", "Bancharampur", "Bijoynagar", "Nasirnagar",
"Nabinagar", "Sarail "],
"Rangamati": ["Rangamati Sadar", "Belaichhari", "Bagaichhari ", "Barkal ", "Juraichhari ", "Rajasthali ", "Kaptai ",
"Langadu", "Naniarchar", "Kaukhali "],
"Noakhali": ["Senbagh ", "Begumganj ", "Chatkhil", "Companiganj ", "Noakhali Sadar","Hatiya ", "Kabirhat ", "Sonaimuri
", "Suborno Char ", "Bhashan Char"],
"Chandpur": ["Chandpur Sadar ", "Faridganj", "Haimchar", "Hajiganj ", "Kachua", "Matlab Dakshin", "Matlab Uttar",
"Shahrasti"],
"Lakshmipur": ["Lakshmipur Sadar ", "Ramganj ", "Raipur", "Ramgati ", "Kamalnagar"],
"Chattogram": ["Anwara", "Banshkhali", "Boalkhali", "Chandanaish", "Fatikchhari", "Hathazari", "Karnaphuli", "Lohagara",
"Mirsharai", "Patiya ", "Rangunia", "Raozan", "Sandwip", "Satkania", "Sitakunda"],
"Coxsbazar": ["Chakaria", "Cox's Bazar Sadar", "Kutubdia ", "Maheshkhali ", "Ramu", "Teknaf ", "Ukhia ", "Pekua",
"Eidgaon"],
"Khagrachhari": ["Dighinala", "Khagrachhari Sadar", "Lakshmichhari", "Mahalchhari ", "Manikchhari", "Matiranga",
"Panchhari ", "Ramgarh ", "Guimara"],
"Bandarban": ["Bandarban Sadar", "Thanchi", "Lama", "Naikhongchhari", " Ali kadam", " Rowangchhari", " Ruma"]
},
}
window.onload = function() {
var subjectSel = document.getElementById("divitions");
var topicSel = document.getElementById("district");
var chapterSel = document.getElementById("upozila");
for (var x in subjectObject) {
subjectSel.options[subjectSel.options.length] = new Option(x, x);
}
subjectSel.onchange = function() {
//empty Chapters- and Topics- dropdowns
chapterSel.length = 1;
topicSel.length = 1;
//display correct values
for (var y in subjectObject[this.value]) {
topicSel.options[topicSel.options.length] = new Option(y, y);
}
}
topicSel.onchange = function() {
//empty Chapters dropdown
chapterSel.length = 1;
//display correct values
var z = subjectObject[subjectSel.value][this.value];
for (var i = 0; i < z.length; i++) { chapterSel.options[chapterSel.options.length]=new Option(z[i], z[i]); } } }


</script>