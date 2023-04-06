import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListingMatriceCompetenceComponent } from './listing-matrice-competence.component';

describe('ListingMatriceCompetenceComponent', () => {
  let component: ListingMatriceCompetenceComponent;
  let fixture: ComponentFixture<ListingMatriceCompetenceComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ListingMatriceCompetenceComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ListingMatriceCompetenceComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
