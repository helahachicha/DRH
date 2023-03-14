import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListingdevjuniorComponent } from './listingdevjunior.component';

describe('ListingdevjuniorComponent', () => {
  let component: ListingdevjuniorComponent;
  let fixture: ComponentFixture<ListingdevjuniorComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ListingdevjuniorComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ListingdevjuniorComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
