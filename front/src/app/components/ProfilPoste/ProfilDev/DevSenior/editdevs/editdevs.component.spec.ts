import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EditdevsComponent } from './editdevs.component';

describe('EditdevsComponent', () => {
  let component: EditdevsComponent;
  let fixture: ComponentFixture<EditdevsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ EditdevsComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(EditdevsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
