import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-detail-test',
  templateUrl: './detail-test.component.html',
  styleUrls: ['./detail-test.component.scss']
})
export class DetailTestComponent implements OnInit {

  id: any;
  public Testtechniques

  public testForm = new FormGroup({
   label: new FormControl('', [Validators.required]), 

  });


  constructor(
    private dataService:DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
    this.route.params.subscribe(params => {
      const id = params['id'];
      this.dataService.get('Comptechniques/getComptechByTesttech.json?id='+id).subscribe(
        res => {
        this.Testtechniques=res.data;  
      })
  });  
  }
}
