
Final Project (Deadline: Jan. 30, 2023) Virtual or F2f CheckingForum
Landing Page (40pts)

(Landing Page and Backend API is in 1 Laravel Project) or use the Monolithic Setup

Identify an establishment here in Butuan City (it could be online or local establishment), wherein you will create a Website or Landing Page for that said establishment. All images and content should be proper and formal. It’s up to you to conduct interview in order to get the correct information of the establishment.

Landing Page Structure (You can set it in different order, as long as those sections are shown, * are Optional)
o   Home Header (It contains the Name of Establishment, motto or description)
o   Announcements (Slider or Carousel) (Announcements are based on DB data)
o   About Us
o   Mission and Vision* (if there is any)
o   Products/Services
o   Social Media Logos and Links
o   Google Map Location (Embedded Map) (Additional Points)
o   Owner or Founder* (if they want to be shown)

Landing Page Notes:

Utilize free labeled templates in https://startbootstrap.com/. You are encouraged to use other CSS Frameworks aside from Bootstrap if you want like Tailwind, Materialize and etc.
Make use Laravel 9 Blades in structuring the Landing Page. It is up to you if you want it as Single Page or in Multiple Pages Structure (another Page for Contact Us or the likes).
Utilize documentations of Laravel and Bootstrap (version of Bootstrap depends on what version of the Bootstrap Template you used) or other CSS Framework you used. 
PLEASE MAKE SURE THAT THE LANDING PAGE IS A RESPONSIVE DESIGN (web and mobile), that's why utilize wisely the chosen CSS Framework.

Backend (30pts)

(Landing Page and Backend API is in 1 Laravel Project. Due to the reason route > api is used for the API) or utilize the Monolithic Setup

Provide Database Migration and API’s for the following:

Login and Forgot Password Migration (This are already set by Laravel Migration, please do read the Laravel 9 Migration and Laravel Sanctum Documentation for the DB and Authentication)
Login Modification - Provide Login API for users (Admin and Establishment Clerk, it means 2 user type). Modify users table migration file.
List of Users (CRUD)
List of Announcements (CRUD) – Announcements in Homepage will dynamically change every time the list has changed.
The database table for announcements will have columns:
announcement_id, header, sub_header, image, description, user_id (FK)
o   Actions in Announcements(CRUD):

§  Display Announcements

§  Add Announcement

§  Update Announcement

§  Delete Announcement

Frontend (30pts)

JS Framework Project Name: establishment-name or utilize the Monolithic Setup wherein instead of APIs, you will use the CRUD setup in Laravel

Login Page (For Admin and Establishment Clerk), Forgot Password Page 
Dashboard (This could be blank)
List of Users (Only Admin will be able to see this)
List of Announcements (CRUD) – Announcements in Homepage will dynamically change every time the list has changed. Set request for all actions to fetch the API response. We will utilize Axios to fetch the API response from Backend.

Frontend Notes: 

Monolithic setup is already discussed so that you will be able to pass on time. Utilizing APIs is now optional. Kindly check the recordings link for tutorials.

Git Requirements:
* Laravel Project Name: webapp-establishment-name (Landing Page and Backend API is in 1 Laravel Project) and JS Framework Project Name: webapp-frontend-establishment-name should be pushed separately in the Github repository, both having at least 2 branches (development, main) or use the monolithic setup wherein 1 project has 2 git branches same as mentioned in n-tier setup. Development branch would be your branch in developing and you can create multiple branches for features and bugfixes if you want. The main branch would be the stable branch in which your development branch will be merged soon. We will not setup staging branch as we don't have the time to tackle ci/cd pipeline and deployment


Weegools offers a menu of food and beverages with a destinctive image and affordable price. The famous specialty: Chicken Inato and Buko Halo have become a byword in the city. Weegools menu also serve refreshing juices and shakes and other delectable foods such as soups, sizzlers. noodles, vegetables, seafoods, desserts, etc. Diners can choose various kinds of these foods and drinks,

Weegools expanded its business by putting up branches in different areas, Weegools Garden located in City Hall Drive, Weegools grill Haus located in Montilla Blvd both in Butuan City and Weegools Grill haus in Curato street, cabadbaran City.

For years, Weegools has become the choice of many diners in Butuan city - great food, accessible location, beautiful ambiance and knowledgeable service. At Weegools, you're indeed served with warm welcome.

As what the Butuanons says: "IF YOU HAVEN'T BEEN TO WEEGOOL'S, YOU HAVEN'T BEEN TO BUTUAN."...