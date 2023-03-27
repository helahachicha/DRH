import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AddthemedeformationComponent } from './addthemedeformation.component';

describe('AddthemedeformationComponent', () => {
  let component: AddthemedeformationComponent;
  let fixture: ComponentFixture<AddthemedeformationComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ AddthemedeformationComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AddthemedeformationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
