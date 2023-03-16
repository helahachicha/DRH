import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListingdevsComponent } from './listingdevs.component';

describe('ListingdevsComponent', () => {
  let component: ListingdevsComponent;
  let fixture: ComponentFixture<ListingdevsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ListingdevsComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ListingdevsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
