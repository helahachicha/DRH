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
export class PublicGuard implements CanActivate {


  public activeUser: UserInterface;

  canActivate(next: ActivatedRouteSnapshot, state: RouterStateSnapshot) {
    if (!this.Auth.isLoggedIn()){
      return true;
    }else{
      return this.router.parseUrl('');
    }
  }

  constructor(
    private Auth: AuthService,
    private router: Router
  ) { }
}
