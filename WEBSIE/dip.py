import cv2
import numpy as np

# Load pre-trained face detection model
face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'hh.xml')

# Load pre-trained MobileNetV2 model for image classification
net = cv2.dnn.readNetFromTensorflow('path_to_mobilenet_v2.pb', 'path_to_mobilenet_v2.pbtxt')

# List of class labels for ImageNet dataset
class_labels = ['background', 'person', 'bicycle', 'car', 'motorcycle', 'airplane', 'bus', 'train', 'truck', 'boat', 
                'traffic light', 'fire hydrant', 'stop sign', 'parking meter', 'bench', 'bird', 'cat', 'dog', 'horse', 
                'sheep', 'cow', 'elephant', 'bear', 'zebra', 'giraffe', 'backpack', 'umbrella', 'handbag', 'tie', 
                'suitcase', 'frisbee', 'skis', 'snowboard', 'sports ball', 'kite', 'baseball bat', 'baseball glove', 
                'skateboard', 'surfboard', 'tennis racket', 'bottle', 'wine glass', 'cup', 'fork', 'knife', 'spoon', 
                'bowl', 'banana', 'apple', 'sandwich', 'orange', 'broccoli', 'carrot', 'hot dog', 'pizza', 'donut', 
                'cake', 'chair', 'couch', 'potted plant', 'bed', 'dining table', 'toilet', 'tv', 'laptop', 'mouse', 
                'remote', 'keyboard', 'cell phone', 'microwave', 'oven', 'toaster', 'sink', 'refrigerator', 'book', 
                'clock', 'vase', 'scissors', 'teddy bear', 'hair drier', 'toothbrush']

# Function to detect faces in an image
def detect_faces(image):
    gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
    faces = face_cascade.detectMultiScale(gray, scaleFactor=1.1, minNeighbors=5, minSize=(30, 30))
    return faces

# Function to classify image using MobileNetV2
def classify_image(image):
    blob = cv2.dnn.blobFromImage(cv2.resize(image, (224, 224)), 1.0, (224, 224), (103.939, 116.779, 123.680), swapRB=True)
    net.setInput(blob)
    predictions = net.forward()
    return predictions

# Load image
image_path = 'path_to_image.jpg'
image = cv2.imread(image_path)

# Detect faces
faces = detect_faces(image)

# Classify each detected face
for (x, y, w, h) in faces:
    face_roi = image[y:y+h, x:x+w]
    predictions = classify_image(face_roi)
    label = class_labels[np.argmax(predictions)]
    confidence = predictions[0][np.argmax(predictions)]
    
    # Draw bounding box and label
    cv2.rectangle(image, (x, y), (x+w, y+h), (255, 0, 0), 2)
    cv2.putText(image, f'{label}: {confidence:.2f}', (x, y-10), cv2.FONT_HERSHEY_SIMPLEX, 0.5, (255, 0, 0), 2)

# Display result
cv2.imshow('Face Classification', image)
cv2.waitKey(0)
cv2.destroyAllWindows()
