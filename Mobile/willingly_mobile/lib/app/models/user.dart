import 'package:flutter/widgets.dart';
import 'package:willingly/app/utils/utils.dart';

class User {
static String name, surname;
static String mail, id;
static int age;
static String phone;
static double rate;
static String adress, about, skills;
static String password, imageUrl='assets/images/blank-profile-picture.png', username;
static bool emailVerification;
static bool phoneVerification;
}

// Names generated at http://random-name-generator.info/
List<User> users = [
];

List<String> userHobbies = [
  "Dancing", "Hiking", "Singing", "ala32", "Fishing"
]; 
