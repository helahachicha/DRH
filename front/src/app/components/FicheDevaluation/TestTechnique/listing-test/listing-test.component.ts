import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listing-test',
  templateUrl: './listing-test.component.html',
  styleUrls: ['./listing-test.component.scss']
})
export class ListingTestComponent implements OnInit {
public Testtechniques
 
  constructor(
    private dataService:DataService,
  ) { }

  ngOnInit(): void {
    this.getAllTesttechnique()
  }

  getAllTesttechnique() {
    this.dataService.get('Testtechniques/getAllTesttechnique.json').subscribe(res => {
       this.Testtechniques = res.data; 
     })
   }
   deletetest(id){
    this.dataService.delete('Testtechniques/deleteTesttechnique.json?id='+id).subscribe(res => {
       this.getAllTesttechnique()
    })
   } 
}
