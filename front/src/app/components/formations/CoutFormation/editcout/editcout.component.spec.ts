import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EditcoutComponent } from './editcout.component';

describe('EditcoutComponent', () => {
  let component: EditcoutComponent;
  let fixture: ComponentFixture<EditcoutComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ EditcoutComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(EditcoutComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
