import { EventEmitter, Injectable, Output } from "@angular/core";
import { HttpClient, HttpHeaders } from "@angular/common/http";
import { BehaviorSubject} from "rxjs";
import { JwtHelperService } from '@auth0/angular-jwt';
import { UserInterface } from "../interface/user.interface";
import {environment} from "../../../environments/environment";

const BASEURL = environment.BASEURL;
@Injectable({
  providedIn: "root",
})
export class AuthService {
  @Output() change: EventEmitter<string> = new EventEmitter();

  private loggedIn = new BehaviorSubject <boolean> (this.isLoggedIn());
  private loggedInUser = new BehaviorSubject <any> (this.getUserInformation());

  authStatus = this.loggedIn.asObservable();
  activeUser = this.loggedInUser.asObservable();

  constructor(
    private http: HttpClient,
  ){}

  get(){
    const token = localStorage.getItem('token');
    if (token) { return token; }
    return null;
  }

  login(token) {
    localStorage.setItem('token', token);
    this.changeAuthStatus(true);
    this.changeLoggedInUser();
  }


  update(token?) {
    if (token){
      localStorage.setItem('token', token);
    }

    this.loggedInUser.next(this.getUserInformation());
  }

  logout(){
    localStorage.removeItem('token');
    this.changeAuthStatus(false);
  }

  changeAuthStatus( value: boolean) {
    this.loggedIn.next(value);
  }

  changeLoggedInUser(){
    const loggedin = this.getUserInformation();

    this.loggedInUser.next(loggedin);
  }

  isLoggedIn(){
    const jwtHelper = new JwtHelperService();
    const token = localStorage.getItem('token');
    if (!token){
      return false;
    }
    else{
      if (!jwtHelper.isTokenExpired(token)){
        // this.logout();
        return true;
      }
      else{
        localStorage.removeItem('token');
        return false;
      }
    }

  }



  handleResponse(data){
    this.update(data.data.token);
  }

  getUserInformation(){
    const token = localStorage.getItem('token');
    if (!token) { return null; }
    const jwtHelper = new JwtHelperService();
    const result = jwtHelper.decodeToken(token);
    const activeUser: UserInterface[] = [
      {
        id: result.id,
        email: result.email,
        role: result.role


      }
    ];
    return activeUser;
  }

}
