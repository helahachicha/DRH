import { HttpClient, HttpHeaders, HttpParams } from '@angular/common/http';
import { environment } from 'src/environments/environment';
import { Injectable } from '@angular/core';
import { AuthService } from './auth.service';



@Injectable({
  providedIn: 'root'
})
export class DataService {

  baseUrl = environment.BASEURL ;

  constructor(private http: HttpClient, protected Auth: AuthService) { }

  createHeader(){
    const token = this.Auth.get();
    if (token) {
      const  headers = new HttpHeaders()
        .set('Authorization', 'Bearer ' + token);
      return headers;
    }
    else{
      const  headers = new HttpHeaders();

      return headers;
    }
  }
  createBody(data:any){
    const body = new HttpParams()
      .set('data', JSON.stringify(data));
    return body;
  }

  post(uri: string, data: any){ 
    return this.http.post<any>(this.baseUrl + uri,  this.createBody(data) , {headers: this.createHeader()});
  }

  get(uri: string){
    return this.http.get<any>(this.baseUrl + uri , {headers: this.createHeader()});
  }

  delete(uri: string){
    return this.http.delete<any>(this.baseUrl + uri , {headers: this.createHeader()});
  }


}
