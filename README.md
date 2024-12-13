**Educational Website Documentation**

### **Introduction**
This project "Master Mind" is an educational website focused on course management. Built using **Laravel 11** with **Jetstream** for authentication, the platform is designed to provide a seamless user experience for both learners and administrators.

### **Website Overview**
The site consists of two main roles:
1. **User**: Learners who browse and join courses.
2. **Admin**: Administrators who manage content, categories, and courses.

It provides access to several pages, including, but not limited to:

* **Home**
* **About**
* **Courses-(Category and Course pages)**
* **Contact**
* **Default Authentication Pages** - Login, Register, etc.

### **Page Details**

#### **1. Home Page**
- This page is the landing page which welcomes users and invites them to join the platform.
- It includes a welcome note and highlights of its salient features.

#### **2. About Page**
- Briefly introduces the website about its mission and goals.
- Gives a background insight into the platform and who its founders are.

#### **3. Courses Page**
This section has two sub-pages:
- **Category Page**:
  - It contains a dynamic listing of categories for courses.
  - Each category can be further explored to look for desired courses.
- **Course Page**:
  - Lists all courses dynamically.
- Users can view the list of courses, but the **Join** button appears only for signed-in users with the "User" role.
  - If the user is not signed in or does not have the "User" role, the **Join** button will not appear.

#### **4. Contact Page**
- Contact will include all the contact details like email and phone.
- A form through which the user can directly send messages or inquiries via the website.

#### **5. Authentication Pages**
- Default Laravel Jetstream authentication pages for user login, registration, and password management.
- If user register the website and then will send the welcome email to registered account email(only gmail)
- If user join the courses and then will send the joined courses email to all admin email(only gmail)

### **Key Functionalities**
1. **Dynamic Content Display**:
   - Course categories and courses are dynamically shown from the database.
2. **Role-Based Access**:
   - The **Join** button is restricted to the authenticated users with the "User" role.
3. **Interactive Contact Form**:
- Users can contact through a form to directly communicate with the site administrators.

### **Purpose and Intent**
The main objective of this project is to develop an intuitive and effective course management platform that connects learners with educational resources. By providing role-based access and dynamic content, the site ensures that users have a personalized and secure experience.

This documentation serves as a blueprint in understanding the functionality and intention of the educational platform.
