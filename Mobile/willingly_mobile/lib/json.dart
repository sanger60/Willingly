import 'dart:async';
import 'dart:convert';
import 'dart:io';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'package:willingly/app/utils/sessionId.dart';
import 'package:willingly/app/models/user.dart' as us;

Future<LoginJson> fetchPost(mail, pass) async {
  var response = await http.get(
      'https://willingly.tk/inc/php/logincheck.php?email=$mail&password=$pass',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
        'Accept': '*/*'
      });
  if (response.statusCode == 200) {
    return LoginJson.fromJson(json.decode(response.body));
  } else {
    throw Exception('Failed to load post');
  }
}

Future<LoginJson> returnLogin(mail, pass) {
  return fetchPost(mail, pass).then((e) {
    return e;
  });
}

class LoginJson {
  bool status;
  String session;

  LoginJson({this.status, this.session});

  factory LoginJson.fromJson(Map<String, dynamic> json) {
    return LoginJson(
      status: json['Status'],
      session: json['SessionID'],
    );
  }
}

class LoginCheck {
  Future<LoginJson> post;

  LoginCheck({Key key, @required this.post});
}

//Name,Surname,UserName,Email,Password
class Post {
  final String name;
  final String surname;
  final String username;
  final String email;
  final String password;
  bool statu;
  String id;
  Post(
      {this.name,
      this.surname,
      this.username,
      this.email,
      this.password,
      this.statu,
      this.id});

  factory Post.fromJson(Map<String, dynamic> json) {
    return Post(
      statu: json['Status'],
      id: json['SessionId'],
    );
  }

  Map toMap() {
    var map = new Map<String, dynamic>();
    map['Name'] = name;
    map['Surname'] = surname;
    map['UserName'] = username;
    map['Email'] = email;
    map['Password'] = password;
    return map;
  }
}

Future postDeneme(Map _body) async {
  print("body : " + _body.toString());
  String url = 'https://willingly.tk/inc/php/Insert_CreateNewUser.php';
  return http
      .post(url,
          headers: {'Content-Type': 'application/x-www-form-urlencoded'},
          body: _body)
      .then((http.Response response) {
    final int statusCode = response.statusCode;
    if (statusCode < 200 || statusCode > 400 || json == null) {
      throw new Exception("Error while fetching data");
    }
    return Post.fromJson(json.decode(response.body));
  });
}

//KATEGOR İŞLEMLERİ
class Category {
  final String id;
  final String name;
  final String desc;
  final bool status;
  Category({this.id, this.name, this.status, this.desc});

  factory Category.fromJson(Map<String, dynamic> json) {
    return Category(
      id: json['Id'] as String,
      name: json['Name'] as String,
      desc: json['Desc'] as String,
      status: json['Status'] as bool,
    );
  }
}

List<Category> parseCategory(String responseBody) {
  final parsed =
      json.decode(responseBody)['Catagory'].cast<Map<String, dynamic>>();

  return parsed.map<Category>((json) => Category.fromJson(json)).toList();
}

Future<List<Category>> fetchCategory() async {
  final response =
      await http.get('https://willingly.tk/inc/php/Get_FilterConfig.php');
  if (response.statusCode == 200) {
    return parseCategory(response.body);
  } else {
    throw Exception('Failed to load post');
  }
}

class CategoryPost {
  final String id, categoryIdGet;
  final int userId;
  final String title,
      explanation,
      price,
      donationPrice,
      advertisementRate,
      advertisementSkills;

  CategoryPost({
    this.id,
    this.categoryIdGet,
    this.userId,
    this.title,
    this.explanation,
    this.price,
    this.donationPrice,
    this.advertisementRate,
    this.advertisementSkills,
  });

  factory CategoryPost.fromJson(Map<String, dynamic> parsedJson) {
    return CategoryPost(
      id: parsedJson['Id'],
      userId: parsedJson['UserId'],
      title: parsedJson['Tittle'],
      explanation: parsedJson['Explanation'],
      price: parsedJson['Price'],
      donationPrice: parsedJson['DonationPrice'],
      advertisementRate: parsedJson['AdvertisementRate'],
      advertisementSkills: parsedJson['AdvertisementSkills'],
      categoryIdGet: parsedJson['CatagoryId'],
    );
  }
  
}

class CategoryPostList {
  //Alınacak
  List<CategoryPost> list;

  //Basılacak
  final String pageId;
  final String categoryId;
  CategoryPostList({this.list, this.pageId, this.categoryId});

  factory CategoryPostList.fromJson(Map<String, dynamic> json) {
    var list = json['Data'] as List;
    List<CategoryPost> imagesList =
        list.map((i) => CategoryPost.fromJson(i)).toList();

    return CategoryPostList(
      list: imagesList,
    );
  }

  Map toMap() {
    var map = new Map<dynamic, dynamic>();
    map['PageId'] = pageId;
    map['category'] = categoryId;
    map['searchtip'] = '1';
    map['Mobile'] = 'true';
    return map;
  }
}

Future categoryPost(Map _body) async {
  print("body : " + _body.toString());
  String url = 'https://willingly.tk/inc/php/Get_FreelanceAdvertisement.php';
  return http
      .post(url,
          headers: {'Content-Type': 'application/x-www-form-urlencoded'},
          body: _body)
      .then((http.Response response) {
    final int statusCode = response.statusCode;
    if (statusCode < 200 || statusCode > 400 || json == null) {
      throw new Exception("Error while fetching data");
    }
    return CategoryPostList.fromJson(json.decode(response.body));
  });
}

//
//USER
//
Future<UserData> fetchUser() async {
  
  Map<String, String> headers = {
    HttpHeaders.contentTypeHeader: "application/json", // or whatever
    HttpHeaders.cookieHeader: "PHPSESSID=${SessionId.id}",
    HttpHeaders.acceptHeader : "*/*"
  };

  print('SessionID => ${SessionId.id}');
  var response = await http.get(
      'https://willingly.tk/inc/php/Get_UserInformation.php',
      headers: headers);
  if (response.statusCode < 200 || response.statusCode > 400 || json == null) {
    throw Exception('Failed to load post');
  } else {
    return UserData.fromJson(json.decode(response.body));
  }
}

Future returnUser() {
  return fetchUser().then((e) {
    return e;
  });
}

class User {
  final String name, surname;
  final String mail, id;
  final int age;
  final String phone;
  final double rate;
  final String adress, about, skills;
  final String password, imageUrl, username;
  final bool emailVerification;
  final bool phoneVerification;

  User(
      {this.name,
      this.surname,
      this.mail,
      this.id,
      this.age,
      this.rate,
      this.phone,
      this.adress,
      this.about,
      this.skills,
      this.password,
      this.imageUrl,
      this.username,
      this.emailVerification,
      this.phoneVerification});

  factory User.fromJson(Map<String, dynamic> json) {
    return User(
      id: json['id'],
      name: json['Name'],
      surname: json['Surname'],
      age: json['Age'],
      mail: json['Email'],
      phone: json['Phone'],
      adress: json['Adress'],
      about: json['About'],
      skills: json['Skills'],
      password: json['Password'],
      emailVerification: json['EmailVerification'],
      phoneVerification: json['PhoneVerification'],
      username: json['Username'],
      imageUrl: json['PhotoSrc'],
      rate: json['Rate'],
    );
  }
  Map toMap() {
    // int phoneNum =  as BigInt;
    var map = new Map<dynamic, dynamic>();
    map['Name'] = name;
    map['Surname'] = surname;
    map['Age'] = '17';
    map['Email'] = mail;
    map['Password'] = password;
    map['Phone'] = '05369778515';
    map['About'] = about;
    
    return map;
  }
}

class UserData {
  //Alınacak
  User user;
  UserData({
    this.user,
  });

  factory UserData.fromJson(Map<String, dynamic> json) {
    var list = json['Data']as List;
    var Userlist = list.map((i) => User.fromJson(i)).toList();
    return UserData(
      user: Userlist[0],
    );
  }
}

Future userChange(User user) async {
  Map<String, String> headers = { // or whatever
    HttpHeaders.cookieHeader: "PHPSESSID=${SessionId.id}",
    HttpHeaders.acceptHeader : "*/*"
  };

  Map _body = user.toMap();
  print('body => $_body');
  String url = 'https://willingly.tk/inc/php/Update_UserInformationUpdate.php';
  return http
      .post(url,
          headers: headers,
          body: _body)
      .then((http.Response response) {
    final int statusCode = response.statusCode;
    if (statusCode < 200 || statusCode > 400 || json == null) {
      throw new Exception("Error while fetching data");
    }
    return User.fromJson(json.decode(response.body));
  });
}

//
//Chat room
//
Future<ChatRoomData> fetchChat() async {
  
  Map<String, String> headers = {
    HttpHeaders.contentTypeHeader: "application/json", // or whatever
    HttpHeaders.cookieHeader: "PHPSESSID=${SessionId.id}",
    HttpHeaders.acceptHeader : "*/*"
  };

  print('SessionID => ${SessionId.id}');
  var response = await http.get(
      'https://willingly.tk/inc/php/Get_ChatList.php',
      headers: headers);
  if (response.statusCode < 200 || response.statusCode > 400 || json == null) {
    throw Exception('Failed to load post');
  } else {
    return ChatRoomData.fromJson(json.decode(response.body));
  }
}

Future returnChat() {
  return fetchUser().then((e) {
    return e;
  });
}

class ChatRoom{
  final String id,userName,userImage,message,unreadCount;
  final int reciverId;
  ChatRoom({this.id, this.reciverId, this.userName, this.userImage, this.message, this.unreadCount});

  factory ChatRoom.fromJson(Map<String, dynamic> json) {
    return ChatRoom(
      id: json['Id'],
      reciverId: json['ReciverId'],
      userName: json['userName'],
      userImage: json['userImage'],
      unreadCount: json['unreadCount'],
      message: json['message'] == null ? ' ' :json['message']
    );
  }
}


class ChatRoomData {

  List chatRoom;
  // Map chatRoom;
  ChatRoomData({this.chatRoom});  

  factory ChatRoomData.fromJson(Map<String, dynamic> json) {
    var list = json['Data'];
    return ChatRoomData(
      chatRoom: list,
    );
  }
}
//
//Chat room
//
Future<MessagesData> postChat(int id) async {
  Map<String, String> headers = {
    HttpHeaders.contentTypeHeader: "application/x-www-form-urlencoded", // or whatever
    HttpHeaders.cookieHeader: "PHPSESSID=${SessionId.id}",
    HttpHeaders.acceptHeader : "*/*"
  };
  String url = 'https://willingly.tk/inc/php/Get_ChatMessages.php';
  return http
      .post(url,
          headers: headers,
          body: {'ChatRoomID':'$id'})
      .then((http.Response response) {
    final int statusCode = response.statusCode;
    if (statusCode < 200 || statusCode > 400 || json == null) {
      throw new Exception("Error while fetching data");
    }
    return MessagesData.fromJson(json.decode(response.body));
  });
}

class MessagesData{
  List messages;
  // Map chatRoom;
  MessagesData({this.messages});  

  factory MessagesData.fromJson(Map<String, dynamic> json) {
    var list = json['Data'];
    return MessagesData(
      messages: list,
    );
  }
}

class Messages{

  String id,text;
  int sender,reciver,chatId;
  bool isRead;

  Messages({this.id, this.text, this.sender, this.reciver, this.chatId, this.isRead});
  factory Messages.fromJson(Map<String, dynamic> json) {
    return Messages(
      id: json['Id'],
      sender: json['Sender'],
      reciver: json['Reciver'],
      text: json['Text'],
      isRead: json['IsRead'],
      chatId: json['ChatID'],
    );
  }
  /*
  "Id": "1",
      "Sender": 65,
      "Reciver": 21,
      "Text": "Senin AMK",
      "IsRead": false,
      "ChatID": 0
       */
}
class SendMessages{

  final String text;
  final int reciver,chatId;

  SendMessages(this.text,  this.reciver, this.chatId, );


  Map toMap() {
    var map = new Map<dynamic, dynamic>();
    map['Reciver'] = reciver.toString();
    map['Text'] = text;
    map['ChatID'] = chatId.toString();
    
    return map;
  }
}
Future postNewMessage(Map _body) async {
  Map<String, String> headers = {
    HttpHeaders.contentTypeHeader: "application/x-www-form-urlencoded", // or whatever
    HttpHeaders.cookieHeader: "PHPSESSID=${SessionId.id}",
    HttpHeaders.acceptHeader : "*/*"
  };
  print('message body => $_body');
  String url = 'https://willingly.tk/inc/php/Insert_NewMessage.php';
  return http
      .post(url,
          headers: headers,
          body: _body)
      .then((http.Response response) {
    final int statusCode = response.statusCode;
    if (statusCode < 200 || statusCode > 400 || json == null) {
      throw new Exception("Error while fetching data");
    }
    return MessagesData.fromJson(json.decode(response.body));
  });
}