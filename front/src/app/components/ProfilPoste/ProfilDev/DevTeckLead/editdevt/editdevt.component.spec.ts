import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EditdevtComponent } from './editdevt.component';

describe('EditdevtComponent', () => {
  let component: EditdevtComponent;
  let fixture: ComponentFixture<EditdevtComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ EditdevtComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(EditdevtComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
