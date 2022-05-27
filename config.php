<?php
session_start(); 
$token = session_id();
ini_set('max_execution_time', 300);
set_time_limit(300);
date_default_timezone_set('Asia/Kolkata');
/*-------Some Basic Details (Global Variables) ---------*/
if(isset($_SESSION['user_id']))
{
	$user_id = $_SESSION['user_id'];
}

$inst_name ="Panj-Tech Education";
$inst_about ="We offer allocating one of the best computer centre franchise opportunities for various state in India";
$inst_fullabout ="We offer allocating one of the best computer center franchise opportunities for various state in India to start your own certified computer education academy with minimum investment. franchisee for computer centers are also offered in rural areas and for economically backward individual who are looking to venture into a successful career as an entrepreneur of a computer center as our franchise.";
$inst_his ="Panj-Tech Education Pvt. Ltd a company registered under companies Act. 2013 Government of India. An ISO 9001:2015 Certified Company. We train and groom students to get employed with much advanced skills required to work anywhere in the world. Panj-Tech has implemented Teaching – Learning process by which students have more practical knowledge on the subject they learn for a competitive employ-ability and professional capability. Panj-Tech promotes learning through practical efficiency and result oriented effective process of creations. On importance of IT and constitution of today’s industry based knowledge in theory and practice by the method of lifelong learning is much concentrated in curriculum. Through efficacious pedagogy and modern teaching tools like PowerPoint presentations, interactive problem solving sessions, use of internet, continuous evaluations and modern equipments along with skill development method of learning in practical efficiency spread. An automated process of administrative and operational actives to control and maintain the centers and certifications through Panj-Tech is an absolute solution for the maintenance Quality Management System.";
$inst_vision ="To achieve excellent standards of quality education by keeping pace with rapidly changing technologies and create technical manpower of global standards with capabilities of accepting new challenges.";
$inst_mission ="To strive for excellence in development and deployment of computer applications.
Our efforts are to impart quality and value based education to raise satisfaction level of all stakeholders.
Our endeavour is to provide all possible support to promote research & development Activities.
​To build teaching environment that responds to future challenges.​
To nurture talent and creativity as well as provide aspiring faculties from diverse background with skills to sustain through their professional career.
To provide quality education in both theoretical and applied foundations of computer education and to train students to effectively apply research based education, to solve real world problems.
To amplify the student’s potential & develop their intrapersonal skills and give them competitive edge in every challenging global work environment. Students are moulded to deliver the highest level of performance to serve regional, national and international communities.
To exceed the student’s expectations by providing high quality and cost-effective education. This will be accomplished through the coordination of the associates working together in an ethical, efficient, professional and respectful manner.
";
$inst_address1 ="Address Alba Colony,Phulwari Sharif, ";
$inst_address2 ="Patna - 801505,Bihar, India";
$inst_contact ="7481873333";
$inst_contact2 ="7277891657";
$start_date = '2022-05-24';

$registered_Office="---";
$corporate_Office ='---';
$website ='www.panjtechedu.com';
$inst_support ="";
$inst_email ="info@panjtechedu.com";
$inst_logo ="assets/img/logo.png";
$white_logo ="assets/img/white_logo.png";
$inst_url ="www.panjtechedu.com";
$inst_domain ="https://panjtechedu.com";
$inst_type ="Institute";
$sender_id ="OFFEDU";
$noreply_email ="noreply@apprise.morg.in";
$auth_key ="642128fe8bf590f12eaf361ce469ce4"; // MSG CLUB
$base_url ='https://info@panjtechedu.com/';
$docs_fee=0;
$ref_per =0; // Percentage of Referral

/*---------Social Link ----------*/

$facebook ='http://facebook.com/offerplant';
$twitter ='http://twitter.com/offerplant';
$linkedin ='http://linkedin.com/company/offerplant';
$youtube ='http://youtube.com';
$pinterest ='http://pinterest.com/offerplant';
$instagram ='http://instagram.com/offerplant';


$app_name ='Apprise 1.0';
$dev_company ="OfferPlant Technologies Private Limited";
$dev_by ="OfferPlant";
$dev_url ="http://offerplant.com";
$dev_email ="ask@offerplant.com";
$dev_contact ="9431426600";
/*-------End of Basic Details ---------*/

?>