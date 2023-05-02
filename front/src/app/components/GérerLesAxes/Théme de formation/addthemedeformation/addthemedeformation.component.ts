import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-addthemedeformation',
  templateUrl: './addthemedeformation.component.html',
  styleUrls: ['./addthemedeformation.component.scss']
})
export class AddthemedeformationComponent implements OnInit {
data:any;
message:any;
  public themeForm= new FormGroup({
    label: new FormControl('', [Validators.required]),
    
  });
  constructor(
    private dataService:DataService,
    private router :Router
  ) { }

  ngOnInit(): void {
  }

  addthemeforma() {
   this.dataService.post('Themeformations/addThemeformation.json',this.themeForm.value).subscribe(res=> {
    this.data = res;
      this.message=this.data.message;
      if (this.message=="Théme de formation ajouter avec succés !"){
        this.themeForm.reset();
      }
      console.log(this.message);
    //this.router.navigate(['/listingtheme'])
      })
 }
}
