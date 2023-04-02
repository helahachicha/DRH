import { Component, OnInit } from '@angular/core';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listingthemeforma',
  templateUrl: './listingthemeforma.component.html',
  styleUrls: ['./listingthemeforma.component.scss']
})
export class ListingthemeformaComponent implements OnInit {
  Themeformations:any;


  constructor(
    private dataService:DataService,
  ) { }

  ngOnInit(): void {
    this.getallthemeforma()
  }

  getallthemeforma() {
   this.dataService.get('Themeformations/getAllThemeformation.json').subscribe(res => {
      this.Themeformations = res.data;
    })
  }
  deletethemeforma(id){
   this.dataService.delete('Themeformations/deleteThemeformation.json?id='+id).subscribe(res => {
      this.getallthemeforma()
   })
 }



}
