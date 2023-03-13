import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AddcoutComponent } from './addcout.component';

describe('AddcoutComponent', () => {
  let component: AddcoutComponent;
  let fixture: ComponentFixture<AddcoutComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ AddcoutComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AddcoutComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
