---
title: Intro to Angular Observables.
date: 
author:
  name: Maxim Bleeker
  description: "Maxim Bleeker is a web developer and designer from the US. He is currently a freelance software engineer."
  url: "#"
  gravatar:
  logo: x_logo.jpg
taxonomy:
    category: blog
    tag: [Angular, RxJS]
---

In Angular, an observable is a way to handle asynchronous data. Observables are a powerful way to manage asynchronous data streams in Angular, allowing you to create efficient, reusable, and composable code.

Observables are similar to promises, but they offer a way to cancel or dispose of an ongoing operation, as well as the ability to work with multiple values over time. They are used to handle HTTP requests, responses, and errors, as well as other asynchronous events in Angular.

Here is an example of how to create and use an observable in Angular:

```
import { Observable, of } from 'rxjs';

// Create an observable that emits a value
const myObservable = of(1, 2, 3);

// Subscribe to the observable and log the values it emits
myObservable.subscribe(val => console.log(val));

// Output: 1, 2, 3
```

In the example above, we create an observable using the of operator, which creates an observable that emits a sequence of values. We then subscribe to the observable using the subscribe method, and pass a callback function that is called for each value emitted by the observable.

Observables are a powerful tool for managing asynchronous data in Angular, and are widely used in the framework. They offer a simple and flexible way to manage asynchronous data streams, and can be easily composed and transformed using a variety of operators.