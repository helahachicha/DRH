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
    this.router.navigate(['/listingtheme'])
      })
 }
}
