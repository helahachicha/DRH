import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListingFicheDevaluComponent } from './listing-fiche-devalu.component';

describe('ListingFicheDevaluComponent', () => {
  let component: ListingFicheDevaluComponent;
  let fixture: ComponentFixture<ListingFicheDevaluComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ListingFicheDevaluComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ListingFicheDevaluComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
