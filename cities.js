var state_arr = new Array("Andhra Pradesh",
"Arunachal Pradesh",
"Assam",
"Bihar",
"Chhattisgarh",
"Goa",
"Gujarat",
"Haryana",
"Himachal Pradesh",
"Jammu and Kashmir",
"Jharkhand",
"Karnataka",
"Kerala",
"Madhya Pradesh",
"Maharashtra",
"Manipur",
"Meghalaya",
"Mizoram",
"Nagaland",
"Odisha",
"Punjab",
"Rajasthan",
"Sikkim",
"Tamil Nadu",
"Telangana",
"Tripura",
"Uttarakhand",
"Uttar Pradesh",
"West Bengal",
"Andaman and Nicobar Islands",
"Chandigarh",
"Dadra and Nagar Haveli",
"Daman and Diu",
"Delhi",
"Lakshadweep",
"Puducherry");

var s_a = new Array();
s_a[0]="";
s_a[1]=" Anantapur | Chittoor | East Godavari | Guntur | Kadapa | Krishna | Kurnool | Prakasam | Nellore | Srikakulam | Visakhapatnam | Vizianagaram | West Godavari ";
s_a[2] = "  Anjaw | Changlang | Dibang Valley | East Kameng | East Siang | Kra Daadi | Kurung Kumey | Lohit | Longding | Lower Dibang Valley | Lower Subansiri | Namsai | Papum Pare | Siang | Tawang | Tirap | Upper Siang | Upper Subansiri | West Kameng | West Siang | Itanagar ";
s_a[3] = " Baksa | Barpeta | Biswanath | Bongaigaon | Cachar | Charaideo | Chirang | Darrang | Dhemaji | Dhubri | Dibrugarh | Goalpara | Golaghat | Hailakandi | Hojai | Jorhat | Kamrup Metropolitan | Kamrup (Rural) | Karbi Anglong | Karimganj | Kokrajhar | Lakhimpur | Majuli | Morigaon | Nagaon | Nalbari | Dima Hasao | Sivasagar | Sonitpur | South Salmara Mankachar | Tinsukia | Udalguri | West Karbi Anglong ";
s_a[4] = " Araria | Arwal | Aurangabad | Banka | Begusarai | Bhagalpur | Bhojpur | Buxar | Darbhanga | East Champaran | Gaya | Gopalganj | Jamui | Jehanabad | Kaimur | Katihar | Khagaria | Kishanganj | Lakhisarai | Madhepura | Madhubani | Munger | Muzaffarpur | Nalanda | Nawada | Patna | Purnia | Rohtas | Saharsa | Samastipur | Saran | Sheikhpura | Sheohar | Sitamarhi | Siwan | Supaul | Vaishali | West Champaran "; 
s_a[5] = " Balod | Baloda Bazar | Balrampur | Bastar | Bemetara | Bijapur | Bilaspur | Dantewada | Dhamtari | Durg | Gariaband | Janjgir Champa | Jashpur | Kabirdham | Kanker | Kondagaon | Korba | Koriya | Mahasamund | Mungeli | Narayanpur | Raigarh | Raipur | Rajnandgaon | Sukma | Surajpur | Surguja "; 
s_a[6] = " North Goa | South Goa ";
s_a[7] = " Ahmedabad | Amreli | Anand | Aravalli | Banaskantha | Bharuch | Bhavnagar | Botad | Chhota Udaipur | Dahod | Dang | Devbhoomi Dwarka | Gandhinagar | Gir Somnath | Jamnagar | Junagadh | Kheda | Kutch | Mahisagar | Mehsana | Morbi | Narmada | Navsari | Panchmahal | Patan | Porbandar | Rajkot | Sabarkantha | Surat | Surendranagar | Tapi | Vadodara | Valsad " ;
s_a[8]= " Ambala | Bhiwani | Charkhi Dadri | Faridabad | Fatehabad | Gurugram | Hisar | Jhajjar | Jind | Kaithal | Karnal | Kurukshetra | Mahendragarh | Mewat | Palwal | Panchkula | Panipat | Rewari | Rohtak | Sirsa | Sonipat | Yamunanagar ";
s_a[9] = " Bilaspur | Chamba | Hamirpur | Kangra | Kinnaur | Kullu | Lahaul Spiti | Mandi | Shimla | Sirmaur | Solan | Una ";
s_a[10] = " Anantnag | Bandipora | Baramulla | Budgam | Doda | Ganderbal | Jammu | Kargil | Kathua | Kishtwar | Kulgam | Kupwara | Leh | Poonch | Pulwama | Rajouri | Ramban | Reasi | Samba | Shopian | Srinagar | Udhampur ";
s_a[11] = " Bokaro | Chatra | Deoghar | Dhanbad | Dumka | East Singhbhum | Garhwa | Giridih | Godda | Gumla | Hazaribagh | Jamtara | Khunti | Koderma | Latehar | Lohardaga | Pakur | Palamu | Ramgarh | Ranchi | Sahebganj | Seraikela Kharsawan | Simdega | West Singhbhum ";
s_a[12] = " Bagalkot | Bangalore Rural | Bangalore Urban | Belgaum | Bellary | Bidar | Vijayapura | Chamarajanagar | Chikkaballapur | Chikkamagaluru | Chitradurga | Dakshina Kannada | Davanagere | Dharwad | Gadag | Gulbarga | Hassan | Haveri | Kodagu | Kolar | Koppal | Mandya | Mysore | Raichur | Ramanagara | Shimoga | Tumkur | Udupi | Uttara Kannada | Yadgir ";
s_a[13] = " Alappuzha | Ernakulam | Idukki | Kannur | Kasaragod | Kollam | Kottayam | Kozhikode | Malappuram | Palakkad | Pathanamthitta | Thiruvananthapuram | Thrissur | Wayanad ";
s_a[14] = " Agar Malwa | Alirajpur | Anuppur | Ashoknagar | Balaghat | Barwani | Betul | Bhind | Bhopal | Burhanpur | Chhatarpur | Chhindwara | Damoh | Datia | Dewas | Dhar | Dindori | Guna | Gwalior | Harda | Hoshangabad | Indore | Jabalpur | Jhabua | Katni | Khandwa | Khargone | Mandla | Mandsaur | Morena | Narsinghpur | Neemuch | Panna | Raisen | Rajgarh | Ratlam | Rewa | Sagar | Satna | Sehore | Seoni | Shahdol | Shajapur | Sheopur | Shivpuri | Sidhi | Singrauli | Tikamgarh | Ujjain | Umaria | Vidisha ";
s_a[15] = " Ahmednagar | Akola | Amravati | Aurangabad | Beed | Bhandara | Buldhana | Chandrapur | Dhule | Gadchiroli | Gondia | Hingoli | Jalgaon | Jalna | Kolhapur | Latur | Mumbai City | Mumbai Suburban | Nagpur | Nanded | Nandurbar | Nashik | Osmanabad | Palghar | Parbhani | Pune | Raigad | Ratnagiri | Sangli | Satara | Sindhudurg | Solapur | Thane | Wardha | Washim | Yavatmal ";
s_a[16] = " Bishnupur | Chandel | Churachandpur | Imphal East | Imphal West | Jiribam | Kakching | Kamjong | Kangpokpi | Noney | Pherzawl | Senapati | Tamenglong | Tengnoupal | Thoubal | Ukhrul ";
s_a[17] = " East Garo Hills | East Jaintia Hills | East Khasi Hills | North Garo Hills | Ri Bhoi | South Garo Hills | South West Garo Hills | South West Khasi Hills | West Garo Hills | West Jaintia Hills | West Khasi Hills ";
s_a[18] = "	Aizawl | Champhai | Kolasib | Lawngtlai | Lunglei | Mamit | Saiha | Serchhip | Aizawl | Champhai | Kolasib | Lawngtlai | Lunglei | Mamit | Saiha | Serchhip ";
s_a[19] = "	Dimapur | Kiphire | Kohima | Longleng | Mokokchung | Mon | Peren | Phek | Tuensang | Wokha | Zunheboto ";
s_a[20] = "	Angul | Balangir | Balasore | Bargarh | Bhadrak | Boudh | Cuttack | Debagarh | Dhenkanal | Gajapati | Ganjam | Jagatsinghpur | Jajpur | Jharsuguda | Kalahandi | Kandhamal | Kendrapara | Kendujhar | Khordha | Koraput | Malkangiri | Mayurbhanj | Nabarangpur | Nayagarh | Nuapada | Puri | Rayagada | Sambalpur | Subarnapur | Sundergarh ";
s_a[21] = " Amritsar | Barnala | Bathinda | Faridkot | Fatehgarh Sahib | Fazilka | Firozpur | Gurdaspur | Hoshiarpur | Jalandhar | Kapurthala | Ludhiana | Mansa | Moga | Mohali | Muktsar | Pathankot | Patiala | Rupnagar | Sangrur | Shaheed Bhagat Singh Nagar | Tarn Taran ";
s_a[22] = " Ajmer | Alwar | Banswara | Baran | Barmer | Bharatpur | Bhilwara | Bikaner | Bundi | Chittorgarh | Churu | Dausa | Dholpur | Dungarpur | Ganganagar | Hanumangarh | Jaipur | Jaisalmer | Jalore | Jhalawar | Jhunjhunu | Jodhpur | Karauli | Kota | Nagaur | Pali | Pratapgarh | Rajsamand | Sawai Madhopur | Sikar | Sirohi | Tonk | Udaipur ";
s_a[23] = "	East Sikkim | North Sikkim | South Sikkim | West Sikkim ";
s_a[24] = " Ariyalur | Chennai | Coimbatore | Cuddalore | Dharmapuri | Dindigul | Erode | Kanchipuram | Kanyakumari | Karur | Krishnagiri | Madurai | Nagapattinam | Namakkal | Nilgiris | Perambalur | Pudukkottai | Ramanathapuram | Salem | Sivaganga | Thanjavur | Theni | Thoothukudi | Tiruchirappalli | Tirunelveli | Tiruppur | Tiruvallur | Tiruvannamalai | Tiruvarur | Vellore | Viluppuram | Virudhunagar ";
s_a[25] = "	Adilabad | Bhadradri Kothagudem | Hyderabad | Jagtial | Jangaon | Jayashankar | Jogulamba | Kamareddy | Karimnagar | Khammam | Komaram Bheem | Mahabubabad | Mahbubnagar | Mancherial | Medak | Medchal | Nagarkurnool | Nalgonda | Nirmal | Nizamabad | Peddapalli | Rajanna Sircilla | Ranga Reddy | Sangareddy | Siddipet | Suryapet | Vikarabad | Wanaparthy | Warangal Rural | Warangal Urban | Yadadri Bhuvanagiri ";
s_a[26] = " Dhalai | Gomati | Khowai | North Tripura | Sepahijala | South Tripura | Unakoti | West Tripu";
s_a[27] = "	Agra | Aligarh | Allahabad | Ambedkar Nagar | Amethi | Amroha | Auraiya | Azamgarh | Baghpat | Bahraich | Ballia | Balrampur | Banda | Barabanki | Bareilly | Basti | Bhadohi | Bijnor | Budaun | Bulandshahr | Chandauli | Chitrakoot | Deoria | Etah | Etawah | Faizabad | Farrukhabad | Fatehpur | Firozabad | Gautam Buddha Nagar | Ghaziabad | Ghazipur | Gonda | Gorakhpur | Hamirpur | Hapur | Hardoi | Hathras | Jalaun | Jaunpur | Jhansi | Kannauj | Kanpur Dehat | Kanpur Nagar | Kasganj | Kaushambi | Kheri | Kushinagar | Lalitpur | Lucknow | Maharajganj | Mahoba | Mainpuri | Mathura | Mau | Meerut | Mirzapur | Moradabad | Muzaffarnagar | Pilibhit | Pratapgarh | Raebareli | Rampur | Saharanpur | Sambhal | Sant Kabir Nagar | Shahjahanpur | Shamli | Shravasti | Siddharthnagar | Sitapur | Sonbhadra | Sultanpur | Unnao | Varanasi ";
s_a[28] = " Almora | Bageshwar | Chamoli | Champawat | Dehradun | Haridwar | Nainital | Pauri | Pithoragarh | Rudraprayag | Tehri | Udham Singh Nagar | Uttarkashi ";
s_a[30] = " Alipurduar | Bankura | Birbhum | Cooch Behar | Dakshin Dinajpur | Darjeeling | Hooghly | Howrah | Jalpaiguri | Jhargram | Kalimpong | Kolkata | Malda | Murshidabad | Nadia | North 24 Parganas | Paschim Bardhaman | Paschim Medinipur | Purba Bardhaman | Purba Medinipur | Purulia | South 24 Parganas | Uttar Dinajpur ";
s_a[31] = " Nicobar | North Middle Andaman | South Andaman ";
s_a[32] = " Chandigarh ";
s_a[33] = " DadraHaveli ";
s_a[34] = " Central Delhi | East Delhi | New Delhi | North Delhi | North East Delhi | North West Delhi | Shahdara | South Delhi | South East Delhi | South West Delhi | West Delhi ";
s_a[35] = " Lakshadweep ";
s_a[36] = "Karaikal | Mahe | Puducherry | Yanam ";

function print_state(state_id){
	var option_str = document.getElementById(state_id);
	option_str.length=0;
	option_str.options[0] = new Option('Select State','');
	option_str.selectedIndex = 0;
	for (var i=0; i<state_arr.length; i++) {
		option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
	}
}

function print_city(city_id, city_index){
	var option_str = document.getElementById(city_id);
	option_str.length=0;	
	option_str.options[0] = new Option('Select District','');
	option_str.selectedIndex = 0;
	var city_arr = s_a[city_index].split("|");
	for (var i=0; i<city_arr.length; i++) {
		option_str.options[option_str.length] = new Option(city_arr[i],city_arr[i]);
	}
}
