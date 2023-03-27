import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListingthemeformaComponent } from './listingthemeforma.component';

describe('ListingthemeformaComponent', () => {
  let component: ListingthemeformaComponent;
  let fixture: ComponentFixture<ListingthemeformaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ListingthemeformaComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ListingthemeformaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
