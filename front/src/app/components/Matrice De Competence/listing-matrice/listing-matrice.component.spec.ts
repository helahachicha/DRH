import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListingMatriceComponent } from './listing-matrice.component';

describe('ListingMatriceComponent', () => {
  let component: ListingMatriceComponent;
  let fixture: ComponentFixture<ListingMatriceComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ListingMatriceComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ListingMatriceComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
