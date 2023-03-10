import { Injectable } from "@angular/core";
import {
  Router,
  CanActivate,
  ActivatedRouteSnapshot,
  RouterStateSnapshot,
} from "@angular/router";
import { UserInterface } from "../interface/user.interface";

import { AuthService } from "../service/auth.service";

@Injectable({
  providedIn: "root",
})
export class AdminGuard implements CanActivate {

  public isLogin
  public activeUser: UserInterface;

  canActivate(next: ActivatedRouteSnapshot, state: RouterStateSnapshot) {
    if (this.Auth.isLoggedIn()){
      this.isLogin=this.Auth.isLoggedIn()
       if (this.isLogin){
         return true;
       }else{
        return this.router.parseUrl('/authentication/login');

       }
      }
      else{
        return this.router.parseUrl('/home/pages');
      } 
    }
 
 
 

  constructor(
    private Auth: AuthService,
    private router: Router
  ) { }
}
